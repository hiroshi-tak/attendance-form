<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\AdminFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Attendance
 *
 * @property int $id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $date
 * @property \Illuminate\Support\Carbon|null $clock_in
 * @property \Illuminate\Support\Carbon|null $clock_out
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BreakTime> $breaks
 * @property-read int|null $breaks_count
 * @property-read mixed $break_seconds
 * @property-read mixed $status
 * @property-read mixed $work_seconds
 * @property-read \App\Models\AttendanceRequest|null $pendingRequest
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AttendanceRequest> $requests
 * @property-read int|null $requests_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\AttendanceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance month($userId, $month)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereClockIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereClockOut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereUserId($value)
 */
	class Attendance extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AttendanceRequest
 *
 * @property int $id
 * @property int $attendance_id
 * @property \Illuminate\Support\Carbon|null $clock_in
 * @property \Illuminate\Support\Carbon|null $clock_out
 * @property string|null $note
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Attendance|null $attendance
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BreakRequest> $breakRequests
 * @property-read int|null $break_requests_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\AttendanceRequestFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|AttendanceRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttendanceRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttendanceRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|AttendanceRequest whereAttendanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttendanceRequest whereClockIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttendanceRequest whereClockOut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttendanceRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttendanceRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttendanceRequest whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttendanceRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttendanceRequest whereUpdatedAt($value)
 */
	class AttendanceRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BreakRequest
 *
 * @property int $id
 * @property int $attendance_request_id
 * @property \Illuminate\Support\Carbon $start_time
 * @property \Illuminate\Support\Carbon|null $end_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AttendanceRequest|null $attendanceRequest
 * @method static \Database\Factories\BreakRequestFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|BreakRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BreakRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BreakRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|BreakRequest whereAttendanceRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BreakRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BreakRequest whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BreakRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BreakRequest whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BreakRequest whereUpdatedAt($value)
 */
	class BreakRequest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BreakTime
 *
 * @property int $id
 * @property int $attendance_id
 * @property \Illuminate\Support\Carbon $start_time
 * @property \Illuminate\Support\Carbon|null $end_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Attendance $attendance
 * @method static \Database\Factories\BreakTimeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|BreakTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BreakTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BreakTime query()
 * @method static \Illuminate\Database\Eloquent\Builder|BreakTime whereAttendanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BreakTime whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BreakTime whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BreakTime whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BreakTime whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BreakTime whereUpdatedAt($value)
 */
	class BreakTime extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attendance> $attendances
 * @property-read int|null $attendances_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

